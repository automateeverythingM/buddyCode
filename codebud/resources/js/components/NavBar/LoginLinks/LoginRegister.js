import React from "react";
import { Nav } from "react-bootstrap";

export default function LoginRegister() {
    return (
        <Nav>
            <Nav.Link href="/login">Login</Nav.Link>
            <Nav.Link href="/Register">Register</Nav.Link>
        </Nav>
    );
}
