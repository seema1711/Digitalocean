import React from "react";
import axios from "axios";
import { Row, Col, Card, Table, Button, Spinner } from "react-bootstrap";
import { Link } from "react-router-dom";
import virus from "./virus.png";
import cured from "./cured.png";
import dead from "./dead.png";
import CountUp from "react-countup";

class State_Table extends React.Component {
  constructor(prop) {
    super(prop);
    this.state = {
      states: [],
      load: false,
      search: null
    };
  }
  getData = async () => {
    await axios
      .get(`https://api.rootnet.in/covid19-in/stats/latest`)
      .then(res => {
        const counts = res.data.data.regional;
        this.setState({
          states: counts,
          load: true
        });
      });
  };

  clickMe = e => {
    e.persist();
    this.setState({ search: e.target.value });
    console.log(this.state.search);
  };
  componentDidMount() {
    this.getData();
  }

  render() {
    if (this.state.load) {
      const items = this.state.states.filter(data => {
        if (this.state.search == null) return data;
        else if (
          data.loc.toLowerCase().includes(this.state.search.toLowerCase())
        ) {
          return data;
        }
      });
      const data = (
        <Table responsive="sm" striped hover size="sm">
          <thead>
            <tr>
              <th>State</th>
              <th>Confirmed</th>
              <th>Deaths</th>
              <th>Discharged</th>
              <th>Indian Cases</th>
              <th>Foreign Cases</th>
              <th>Detailed Info</th>
            </tr>
          </thead>
          <tbody>
            {items.map((data, id) => (
              <tr key={id}>
                <td>{data.loc}</td>
                <td>{data.totalConfirmed}</td>
                <td>{data.deaths}</td>
                <td>{data.discharged}</td>
                <td>{data.confirmedCasesIndian}</td>
                <td>{data.confirmedCasesForeign}</td>
                <td>
                  <Link className="btn btn-dark" to={"/" + data.loc}>
                    More Info
                  </Link>
                </td>
              </tr>
            ))}
          </tbody>
        </Table>
      );

      return (
        <div className="container">
          <h1 className="display-4 underline">STATE TABLE</h1>
          <p>Enter state name to view specific state data.</p>
          <input
            type="text"
            className="form-control my-5"
            aria-label="Large"
            aria-describedby="inputGroup-sizing-sm"
            placeholder="eg: Delhi"
            onChange={e => this.clickMe(e)}
          />
          {data}
        </div>
      );
    } else {
      return (
        <div className="spinner">
          <Spinner animation="border" />;
        </div>
      );
    }
  }
}

function ShowData(prop) {
  const data = prop.data;
  return (
    <div className="table-responsive">
      <Table responsive="sm" striped hover size="sm">
        <thead>
          <tr>
            <th>State</th>
            <th>Confirmed</th>
            <th>Deaths</th>
            <th>Discharged</th>
            <th>Indian Cases</th>
            <th>Foreign Cases</th>
            <th>Detailed Info</th>
          </tr>
        </thead>
        <tbody>
          {data.map((data, id) => (
            <tr key={id}>
              <td>{data.loc}</td>
              <td>{data.totalConfirmed}</td>
              <td>{data.deaths}</td>
              <td>{data.discharged}</td>
              <td>{data.confirmedCasesIndian}</td>
              <td>{data.confirmedCasesForeign}</td>
              <td>
                <Link className="btn btn-dark" to={"/" + data.loc}>
                  More Info
                </Link>
              </td>
            </tr>
          ))}
        </tbody>
      </Table>
    </div>
  );
}
export default State_Table;
