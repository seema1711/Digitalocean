import React from "react";
import axios from "axios";
import { Row, Col, Card, Table, Button, Spinner } from "react-bootstrap";
import { Link } from "react-router-dom";
import virus from "./virus.png";
import cured from "./cured.png";
import dead from "./dead.png";
import CountUp from "react-countup";
import Maps from "./Maps";
import Icon from "./covid_icon.png";
import Icons from "./icon.png";

import "./styles.css";
class Home extends React.Component {
  constructor(prop) {
    super(prop);
    this.state = {
      total: [],
      data: [],
      clicked: false,
      states: [],
      load: false
    };
  }
  getData = async () => {
    await axios
      .get(`https://api.rootnet.in/covid19-in/stats/latest`)
      .then(res => {
        const counts = res.data.data.regional;
        const total = res.data.data;
        this.setState({
          total: total,
          data: counts,
          states: counts,
          load: true
        });
      });
  };

  clickedMe = () => {
    this.setState({ clicked: !this.state.clicked });
  };
  componentDidMount() {
    this.getData();
  }

  render() {
    if (this.state.load) {
      return (
        <div className="container">
          <div>
            <img className="mt-5 mb-2 img-fluid" src={Icon} alt="Title" />
          </div>
          <Total names={this.state.total} />
          {/* <h1 className="display-4">Country Wise Stats</h1>

          <Country names={this.state.states} />
          <h1 className="display-4">>For Tabular Data</h1>

          <Button variant="primary" size="lg" active onClick={this.clickedMe}>
            {this.state.clicked ? "Hide Tabular Data" : "Show Tabular Data"}
          </Button>
          {this.state.clicked ? <ShowData data={this.state.data} /> : ""} */}
          <hr
            className="mt-4 mb-5"
            style={{
              border: "0",
              height: "1px",
              backgroundImage:
                "linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0))"
            }}
          />

          <h1 className="display-4 underline">STATE MAP</h1>
          <p>Hover over state icon to view state information</p>

          <Maps />
        </div>
      );
    } else {
      return (
        <div className="spinner">
          <Spinner animation="border" />
        </div>
      );
    }
  }
}

function ShowData(prop) {
  const data = prop.data;
  return (
    <Table responsive="sm" striped hover size="sm">
      <thead>
        <tr>
          <th>State</th>
          <th>Confirmed</th>
          <th>Deaths</th>
          <th>Discharged</th>
          <th>Indian Cases</th>
          <th>Foreign Cases</th>
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
          </tr>
        ))}
      </tbody>
    </Table>
  );
}

function Country(prop) {
  const data = prop.names;
  const d = data.map((data, id) => (
    <Card
      key={id}
      border="light"
      style={{
        width: "18rem",
        margin: "2rem",
        padding: "1rem 1rem ",
        boxShadow:
          "0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"
      }}
    >
      <Card.Header>{data.loc}</Card.Header>
      <Card.Body>
        <Card.Title>State Status</Card.Title>
        <Card.Text>Cases: {data.totalConfirmed}</Card.Text>
        <Card.Text> Deaths: {data.deaths} </Card.Text>

        <Card.Text> Discharged: {data.discharged}</Card.Text>
      </Card.Body>
      <Link className="btn btn-dark" to={"/" + data.loc}>
        More Info
      </Link>
    </Card>
  ));
  return <div className="row">{d}</div>;
}

function Total(prop) {
  const data = prop.names;
  const d = (
    <Row>
      <Col sm={12} md={4}>
        <Card
          border="primary"
          style={{
            margin: "1rem",

            boxShadow:
              "0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"
          }}
        >
          <Card.Body>
            <img src={virus} alt="virus" />{" "}
            <p className="text-muted">Total Infected</p>
            <p className="lead font-weight-bold">
              <CountUp separator="," start={0} end={data.summary.total} />
            </p>
          </Card.Body>
        </Card>
      </Col>

      <Col sm={12} md={4}>
        <Card
          border="info"
          style={{
            margin: "1rem",

            boxShadow:
              "0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"
          }}
        >
          <Card.Body>
            <img src={cured} alt="Cure" />{" "}
            <p className="text-muted">Total Cured</p>
            <p className="lead font-weight-bold">
              <CountUp separator="," start={0} end={data.summary.discharged} />
            </p>
          </Card.Body>
        </Card>
      </Col>

      <Col sm={12} md={4}>
        <Card
          border="dark"
          style={{
            margin: "1rem",

            boxShadow:
              "0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"
          }}
        >
          <Card.Body>
            <img src={dead} alt="death" />{" "}
            <p className="text-muted">Total Deaths</p>
            <p className="lead font-weight-bold">
              <CountUp separator="," start={0} end={data.summary.deaths} />
            </p>
          </Card.Body>
        </Card>
      </Col>
    </Row>
  );
  return <div className="container">{d}</div>;
}

export default Home;
