import React from "react";
import "./styles.css";
import Navs from "./Navs";
import Home from "./Home";
import About from "./About";
import State_Table from "./State_Table";
import Covid from "./Covid";
import States from "./States";
import Footer from "./Footer";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
export default function App() {
  return (
    <div className="App">
      <Router>
        <Navs />
        <Switch>
          <Route exact path="/" component={Home} />

          <Route path="/states" component={State_Table} />
          <Route path="/about" component={About} />

          <Route path="/covid" component={Covid} />
          <Route path="/:name" component={States} />
        </Switch>
      </Router>
      <Footer />
    </div>
  );
}
