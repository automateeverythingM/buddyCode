import React from "react";
import ReactDOM from "react-dom";
import { Button, Select, Input } from "semantic-ui-react";

const options = [
    { key: "projects", text: "Projects", value: "projects" },
    { key: "people", text: "People", value: "people" },
    { key: "mix", text: "Mix", value: "mix" }
];

const InputSearch = () => (
    <Input size="massive" type="text" placeholder="Search..." action>
        <input />
        <Select compact options={options} defaultValue="projects" />
        <Button size="massive" type="submit">
            Search
        </Button>
    </Input>
);

export default InputSearch;
