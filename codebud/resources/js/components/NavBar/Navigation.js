import React from "react";
import { render } from "react-dom";
import { Nav, Navbar, NavDropdown } from "react-bootstrap";
import LoginRegister from "./LoginLinks/LoginRegister";
import UserMenu from "./AuthUser/UserMenu";

export default function Navigation({ auth = false }) {
    return (
        <Navbar collapseOnSelect expand="lg" bg="dark" variant="dark">
            <Navbar.Brand href="#home">Code Buddy</Navbar.Brand>
            <Navbar.Toggle aria-controls="responsive-navbar-nav" />
            <Navbar.Collapse id="responsive-navbar-nav">
                <Nav className="mr-auto">
                    <Nav.Link href="#features">Features</Nav.Link>
                    <Nav.Link href="#pricing">Pricing</Nav.Link>
                    <NavDropdown title="Dropdown" id="collasible-nav-dropdown">
                        <NavDropdown.Item href="#action/3.1">
                            Action
                        </NavDropdown.Item>
                        <NavDropdown.Item href="#action/3.2">
                            Another action
                        </NavDropdown.Item>
                        <NavDropdown.Item href="#action/3.3">
                            Something
                        </NavDropdown.Item>
                        <NavDropdown.Divider />
                        <NavDropdown.Item href="#action/3.4">
                            Separated link
                        </NavDropdown.Item>
                    </NavDropdown>
                </Nav>
                {auth ? <LoginRegister /> : <UserMenu />}
            </Navbar.Collapse>
        </Navbar>
    );
}

if (document.getElementById("navigation")) {
    render(<Navigation />, document.getElementById("navigation"));
}
