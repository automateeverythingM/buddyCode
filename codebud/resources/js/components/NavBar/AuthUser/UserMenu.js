import React from "react";
import { Nav, NavDropdown } from "react-bootstrap";
import { MdPersonOutline } from "react-icons/md";
import classes from "./styles.module.css";
export default function UserMenu() {
    return (
        <Nav>
            <div className={classes.wrapper}>
                <MdPersonOutline />
                <NavDropdown title="user Menu" id="collasible-nav-dropdown">
                    <NavDropdown.Item href="#action/3.1">
                        Profile
                    </NavDropdown.Item>
                    <NavDropdown.Item href="#action/3.2">
                        Messages
                    </NavDropdown.Item>
                    <NavDropdown.Item href="#action/3.3">
                        Projects
                    </NavDropdown.Item>
                    <NavDropdown.Divider />
                    <NavDropdown.Item href="#action/3.4">
                        Settings
                    </NavDropdown.Item>
                </NavDropdown>
            </div>
        </Nav>
    );
}
