import React from "react";
import { Jumbotron } from "react-bootstrap";
import { render } from "react-dom";
export default function HomePage() {
    return (
        <Jumbotron bg={"danger"}>
            <h1 className="display-4 ">
                Find persons that well help you grow.
            </h1>
            <p className="text-muted mb-0">Same lvl of knowledge</p>
            <p className="text-muted my-0">
                Project to practice on and colaborate on
            </p>
            <p className="text-muted my-0">
                Practice ask question and find out together
            </p>
        </Jumbotron>
    );
}

if (document.getElementById("root")) {
    render(<HomePage />, document.getElementById("root"));
}
