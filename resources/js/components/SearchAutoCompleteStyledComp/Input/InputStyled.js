import React, { useEffect, useRef, useState } from "react";
import { useContext } from "react";
import { MainSearchContext } from "../SearchContext/SearchContext";
import { actions } from "../SearchContext/SearchReducer";
import { CloseButton, Input, InputWrapper, Wrapper } from "../StyledComp";
export default function InputStyled({
    size,
    prependIcon,
    handleOnChange,
    suggestedWord,
    dropDownStyle
}) {
    //local state for input
    const [caseSensitiveFill, setCaseSensitive] = useState("");

    //autosugustion koji se dopunjuje
    const {
        state: { inputValue, autoSuggestion },
        dispatch
    } = useContext(MainSearchContext);

    const input = useRef();
    //FIXME: treba da prepravim ovo i da napravim poseban metod
    const setValue = (action, value) =>
        dispatch({ type: action, payload: { value } });

    //appedndujemo na base word suggestion
    const appendSuggestion = (currentValue, suggestion) => {
        const toAppend = suggestion.slice(currentValue.length);
        currentValue += toAppend;
        return currentValue;
    };

    //NOTE: treba doraditi ovo ne potrebno komplikovano
    useEffect(() => {
        if (inputValue === "") input.current.focus();
        //odlaganje treba da se osmisli neki alg
        let timer = setTimeout(() => {
            //saljemo vredonst na osnovu koje cemo dobiti suggestion
            const name = suggestedWord(inputValue);

            if (name === autoSuggestion) return;
            else if (!name) setValue(actions.SET_AUTO_SUGGESTION, "");
            else {
                setValue(
                    actions.SET_AUTO_SUGGESTION,
                    appendSuggestion(inputValue, name)
                );
                setCaseSensitive(name);
            }
        }, 50);

        return () => clearTimeout(timer);
        // eslint-disable-next-line react-hooks/exhaustive-deps
    });

    // set value and call call users handler
    const handleOnChangeInput = event => {
        //uzimamo vrednos inputa
        const value = event.target.value;

        //setujemo value
        setValue(actions.SET_INPUT_VALUE, value);

        //ako je prazan vracamo i cistimo listu ako je ostalo nesto
        if (!value) {
            //NOTE: treba probati sa proverom pre setovnja na prazno
            dispatch({
                type: actions.SET_AUTOCOMPLETE_LIST,
                payload: { value: [] }
            });
            return;
        }
        // spoljasnja promena
        handleOnChange(value);
    };

    //clean input value
    const handleClearInput = event => {
        event.preventDefault();
        //mozda nije dobra ideja ne znam da li dovoljno jasno sta se desava
        dispatch({ type: actions.RESET_STATE });
    };

    //tab autoSuggest pass value to input field
    const handleKeyDown = event => {
        const currentInputValue = event.target.value;
        if (event.key === "Tab") {
            event.preventDefault();
            //ako ima vredonst setujemo je

            autoSuggestion &&
                setValue(actions.SET_ALL_INPUTS, caseSensitiveFill);
        }

        //
        else if (event.key === "Backspace" && !currentInputValue) {
            //brisemo zadnje dodat tag
            dispatch({ type: actions.POP_TAG });
        }

        //add tag and reset all
        else if (event.key === "Enter") {
            dispatch({
                type: actions.ADD_TAG,
                payload: { tag: currentInputValue }
            });

            //
            setValue(actions.RESET_STATE);
        }

        //pomera selektor
        else if (event.key === "ArrowDown") {
            event.preventDefault();
            dispatch({
                type: actions.MOVE_SELECTOR,
                payload: { key: event.key }
            });
        }

        //
        else if (event.key === "ArrowUp") {
            event.preventDefault();
            dispatch({
                type: actions.MOVE_SELECTOR,
                payload: { key: event.key }
            });
        }
    };

    //
    return (
        <Wrapper size={size} dropDownStyle={dropDownStyle}>
            {prependIcon}
            <InputWrapper>
                <Input
                    type="text"
                    autoComplete="off"
                    value={inputValue}
                    onChange={handleOnChangeInput}
                    onKeyDown={handleKeyDown}
                    zIndex="50"
                    ref={input}
                />
                <Input
                    type="text"
                    readOnly
                    autoComplete="off"
                    value={autoSuggestion}
                    zIndex="20"
                    color="#aaa"
                />
            </InputWrapper>
            <CloseButton
                color="red"
                show={inputValue.length}
                onClick={handleClearInput}
            >
                &times;
            </CloseButton>
        </Wrapper>
    );
}
