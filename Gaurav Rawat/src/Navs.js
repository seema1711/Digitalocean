import React from "react";
import { LinkContainer } from "react-router-bootstrap";
import { Navbar, Nav, Image } from "react-bootstrap";
import covid from "./covid.png";

function Navs() {
  return (
    <>
      <Navbar collapseOnSelect expand="lg" bg="dark" variant="dark">
        <LinkContainer to="/">
          <Navbar.Brand>
            <Image src={covid} alt="Home" />
          </Navbar.Brand>
        </LinkContainer>
        <Navbar.Toggle aria-controls="responsive-navbar-nav" />
        <Navbar.Collapse id="responsive-navbar-nav">
          <Nav className="mr-auto" />
          <Nav>
            <LinkContainer to="/states">
              <Nav.Link>States</Nav.Link>
            </LinkContainer>
            <LinkContainer to="/covid">
              <Nav.Link>About COVID19</Nav.Link>
            </LinkContainer>
            <LinkContainer to="/about">
              <Nav.Link>About us</Nav.Link>
            </LinkContainer>
          </Nav>
        </Navbar.Collapse>
      </Navbar>
    </>
  );
}
export default Navs;
