import React from "react";
import { Nav, NavDropdown } from "react-bootstrap";
import { MdPersonOutline } from "react-icons/md";
import Avatar from "../../UI/Avatar";
export default function UserMenu() {
    return (
        <Nav>
            <div className="d-flex align-items-center text-white">
                <NavDropdown
                    className="mr-2"
                    title={
                        <Avatar
                            src="https://picsum.photos/50"
                            size="2em"
                            title="User"
                        />
                    }
                    alignRight
                    id="nav-dropdown"
                >
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
