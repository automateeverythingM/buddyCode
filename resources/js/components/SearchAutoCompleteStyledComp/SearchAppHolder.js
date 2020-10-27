import React from "react";
import ReactDOM from "react-dom";
import SearchAutoTags from "./SearchAutoTags";
import Provider from "./store/configStore";
export default function SearchAppHolder() {
    return (
        <Provider>
            <SearchAutoTags />
        </Provider>
    );
}

if (document.getElementById("mainSearch")) {
    ReactDOM.render(<SearchAppHolder />, document.getElementById("mainSearch"));
}
