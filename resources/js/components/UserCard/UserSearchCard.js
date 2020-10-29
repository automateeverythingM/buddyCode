import React from "react";

export default function UserSearchCard(props) {
    const { name, avatar_url, html_url, location } = props;
    return (
        <li>
            <img src={avatar_url} alt="github avatar" />
            <div>{name}</div>
            <div>{html_url}</div>
            <div>{location}</div>
        </li>
    );
}

