import React from "react";
import { render } from "react-dom";
import { Nav, Navbar, NavDropdown } from "react-bootstrap";
import LoginRegister from "./LoginLinks/LoginRegister";
import UserMenu from "./AuthUser/UserMenu";

export default function Navigation({ auth = false }) {
    return (
        <Navbar collapseOnSelect expand="sm" bg="dark" variant="dark">
            <Navbar.Brand href="#home">Code Buddy</Navbar.Brand>
            <Navbar.Toggle aria-controls="responsive-navbar-nav" />
            <Navbar.Collapse id="responsive-navbar-nav">
                <Nav className="mr-auto">
                    <Nav.Link href="#features">Home</Nav.Link>
                    <Nav.Link href="#pricing">Explore</Nav.Link>
                </Nav>
                {auth ? <LoginRegister /> : <UserMenu />}
            </Navbar.Collapse>
        </Navbar>
    );
}

if (document.getElementById("navigation")) {
    render(<Navigation />, document.getElementById("navigation"));
}
