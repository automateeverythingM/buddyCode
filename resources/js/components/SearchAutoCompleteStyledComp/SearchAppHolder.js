import React from "react";
import ReactDOM from "react-dom";
import InputSearch from "../InputSearch";
import SearchAutoTags from "./SearchAutoTags";
import Provider from "./store/configStore";
export default function SearchAppHolder() {
    return (
        <Provider>
            <SearchAutoTags />
            <InputSearch />
        </Provider>
    );
}

if (document.getElementById("root")) {
    ReactDOM.render(<SearchAppHolder />, document.getElementById("root"));
}
