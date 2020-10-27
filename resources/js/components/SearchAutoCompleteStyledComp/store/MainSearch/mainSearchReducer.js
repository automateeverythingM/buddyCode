import produce from "immer";
import tagList from "../../mocks/tagsMock";
import { onDeleteHandler, manageTagList } from "./logic/tags";
import menageSelector from "./logic/moveSelector";
//! ****************************************************************//
//!ACTIONTYPES CONSTANTS
const DELETE_TAG = "DELETE_TAG";
const POP_TAG = "POP_TAG";
const ADD_TAG = "ADD_TAG";
const MOVE_SELECTOR = "MOVE_SELECTOR";
const SET_SELECTOR = "SET_SELECTOR";
const SET_AUTO_SUGGESTION = "SET_AUTO_SUGGESTION";
const SET_AUTOCOMPLETE_LIST = "SET_AUTOCOMPLETE_LIST";
const SET_INPUT_VALUE = "SET_INPUT_VALUE";
const CLEAR_INPUT = "CLEAR_INPUT";
const RESET_STATE = "RESET_STATE";
const SET_ALL_INPUTS = "SET_ALL_INPUTS";
//! ****************************************************************//
//!ACTIONS

export function deleteTag(id) {
    return { type: DELETE_TAG, payload: { id } };
}

export function popTag() {
    return { type: POP_TAG, payload: {} };
}

export function addTag(tagName) {
    return { type: ADD_TAG, payload: { tagName } };
}

export function moveSelector(key) {
    return { type: MOVE_SELECTOR, payload: { key } };
}

export function setSelector(key) {
    return { type: SET_SELECTOR, payload: { key } };
}

export function setInputValue(value) {
    return { type: SET_INPUT_VALUE, payload: { value } };
}

export function setAutoSuggestion(value) {
    return { type: SET_AUTO_SUGGESTION, payload: { value } };
}

export function setAllInputs(value) {
    return { type: SET_ALL_INPUTS, payload: { value } };
}

export function clearAllInputs() {
    return { type: CLEAR_INPUT, payload: {} };
}

export function setAutocompleteList(value) {
    return { type: SET_AUTOCOMPLETE_LIST, payload: { value } };
}

export function resetState() {
    return { type: RESET_STATE, payload: {} };
}

//! ****************************************************************//
//! INITIAL STATE
const initialState = {
    tagList: tagList,
    dropdownList: [],
    autocompleteList: [],
    tempInputValue: "",
    inputValue: "",
    autoSuggestion: "",
    dropdownSelector: -1,
    tagLimit: 8,
    keyCodes: { 40: 1, 38: -1 },
    manageTagList: () => {},
    onDeleteHandler: () => {},
    toggleTagHandler: () => {},
    moveSelector: () => {},
    setInputValue: () => {},
    setAutoSuggestion: () => {},
    setAutocompleteList: () => {},
};
//! ****************************************************************//
//!REDUCER
export default function reducer(state = initialState, action) {
    const { type, payload } = action;

    return produce(state, (draft) => {
        switch (type) {
            case ADD_TAG:
                const { tagName } = payload;
                manageTagList(tagName, draft.tagList);
                break;
            case DELETE_TAG:
                const { id } = payload;
                onDeleteHandler(draft.tagList, id);
                break;
            case POP_TAG:
                draft.tagList.pop();
                break;
            case MOVE_SELECTOR:
                const { key } = payload;
                menageSelector(draft, key);
                break;
            case SET_SELECTOR:
                const { index } = payload;
                draft.dropdownSelector = index;
                break;
            case SET_AUTO_SUGGESTION:
                draft.autoSuggestion = payload.value;
                break;
            case SET_AUTOCOMPLETE_LIST:
                draft.autocompleteList = payload.value;
                break;
            case SET_INPUT_VALUE:
                draft.inputValue = payload.value;
                break;
            case RESET_STATE:
                draft.autoSuggestion = "";
                draft.inputValue = "";
                draft.autocompleteList = [];
                draft.dropdownSelector = -1;
                break;
            case SET_ALL_INPUTS:
                draft.autoSuggestion = payload.value;
                draft.inputValue = payload.value;
                break;
            case CLEAR_INPUT:
                draft.autoSuggestion = "";
                draft.inputValue = "";
                break;

            default:
                break;
        }
    });
}
