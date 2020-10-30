import Axios from "axios";
import React, { useEffect, useState } from "react";

export default function UserSearchCard({
    name,
    html_url,
    avatar_url,
    location
}) {
    return (
        <li>
            <img src={avatar_url} alt="github avatar" />
            <div>{name}</div>
            <div>{html_url}</div>
            <div>{location}</div>
        </li>
    );
}
