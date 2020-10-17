import React from "react";
import { Image } from "react-bootstrap";

export default function Avatar({ src, title, size }) {
    return (
        <>
            <span
                className="d-inline-block mr-1"
                style={{ width: size, height: size }}
            >
                <Image className="mr-1 border" src={src} roundedCircle fluid />
            </span>
            <span>{title}</span>
        </>
    );
}
