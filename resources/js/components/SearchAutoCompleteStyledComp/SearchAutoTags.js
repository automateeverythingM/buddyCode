import React from "react";
import SearchACSC from "./SearchACSC";
import { DivZIndex, Jumbotron } from "./StyledComp";
import TagUl from "./TagInput/TagUl";
import { GiCaveman } from "react-icons/gi";
import Brand from "../Icon/brand";

export default function SearchAutoTags() {
    return (
        <Jumbotron>
            <Brand size={"30em"} color="whitesmoke" />
            <DivZIndex>
                <TagUl />
                <SearchACSC />
            </DivZIndex>
        </Jumbotron>
    );
}
