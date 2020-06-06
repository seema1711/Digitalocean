import React from "react";
function Footer() {
  return (
    <footer className="mastfoot mt-5 " style={{ backgroundColor: "black" }}>
      <div className="inner py-5">
        <p className="text-white">
          Made by{" "}
          <a
            className="text-white"
            style={{ textDecoration: "none" }}
            href="https://gauravrawat97.github.io/"
          >
            Gaurav Rawat
          </a>
          .
        </p>
      </div>
    </footer>
  );
}
export default Footer;
