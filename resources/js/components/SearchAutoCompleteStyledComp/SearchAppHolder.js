import React from "react";
import ReactDOM from "react-dom";
import UserSearchCard from "../UserCard/UserSearchCard";
import SearchAutoTags from "./SearchAutoTags";
import Provider from "./store/configStore";
export default function SearchAppHolder() {
    return (
        <div>
            <Provider>
                <SearchAutoTags />
            </Provider>
            <UserSearchCard />
        </div>
    );
}

if (document.getElementById("mainSearch")) {
    ReactDOM.render(<SearchAppHolder />, document.getElementById("mainSearch"));
}
