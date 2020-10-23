import React from "react";
import SearchACSC from "./SearchACSC";
import { render } from "react-dom";
import SearchAutoTags from "./SearchAutoTags";
import Provider from "./SearchContext/SearchContext";
export default function SeaechAppHolder() {
    return (
        <Provider>
            <SearchAutoTags />
        </Provider>
    );
}

if (document.getElementById("mainSearch")) {
    render(<SeaechAppHolder />, document.getElementById("mainSearch"));
}
