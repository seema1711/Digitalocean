import React from "react";
import axios from "axios";
import Chart from "react-apexcharts";
import "./styles.css";
import { Card, Col, Row, Container, Spinner } from "react-bootstrap";
import Hos from "./Hospital.png";
import Bed from "./Bed.png";

class States extends React.Component {
  constructor(prop) {
    super(prop);
    this.state = {
      Hospitals: [],
      mystate: this.props.match.params.name,
      contact: null,
      data: [],
      load1: false,
      load2: false,
      load3: false,
      load4: false,
      options: {
        chart: {
          height: "380",
          width: "100%",
          type: "line",
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: "straight"
        },
        title: {
          text: "Data couldn't load properly please reload",
          align: "left"
        },
        grid: {
          row: {
            colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
            opacity: 0.5
          }
        },
        xaxis: {
          categories: [],
          type: "datetime"
        }
      },
      series: [
        {
          type: "line",

          name: "data",
          data: []
        },
        {
          type: "line",

          name: "data",
          data: []
        },
        {
          type: "line",

          name: "data",
          data: []
        }
      ]
    };
  }
  getData = async () => {
    await axios
      .get(`https://api.rootnet.in/covid19-in/stats/history`)
      .then(res => {
        const counts = res.data.data;
        this.setState({
          data: counts,
          load1: true
        });
      });
    console.log("First");
    if (this.state.load1) this.getChart();
    else console.log(this.state);
  };

  getChart = () => {
    let tab = [];
    let deaths = [];
    let cures = [];
    this.state.data.map(datas =>
      datas.regional
        .filter(d => d.loc === this.props.match.params.name)
        .map(
          z => (
            tab.push(z.totalConfirmed),
            deaths.push(z.deaths),
            cures.push(z.discharged)
          )
        )
    );
    let dates = [];
    this.state.data.map(datas => dates.push(datas.day));
    this.setState({
      series: [
        {
          name: "Cases",
          data: tab
        },
        {
          name: "Deaths",
          data: deaths
        },
        {
          name: "Discharged",
          data: cures
        }
      ]
    });

    this.setState({
      options: {
        chart: {
          height: 350,
          width: "100%",
          type: "line",
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: "straight"
        },
        title: {
          text: "Covid Cases",
          align: "left"
        },
        grid: {
          row: {
            colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
            opacity: 0.5
          }
        },
        xaxis: {
          categories: dates
        }
      }
    });

    console.log(this.state);
  };

  getContact = async () => {
    await axios.get(`https://api.rootnet.in/covid19-in/contacts`).then(res => {
      const cont = res.data.data.contacts.regional;
      this.setState({
        contact: cont,
        load2: true
      });
      console.log("Second");
    });
  };

  getHospital = async () => {
    await axios
      .get(`https://api.rootnet.in/covid19-in/hospitals/beds`)
      .then(res => {
        const hospital = res.data.data.regional;

        this.setState({
          Hospitals: hospital,
          load3: true
        });
        console.log("Third");
      });
  };

  componentDidMount() {
    this.getData();
    this.getContact();
    this.getHospital();
  }

  render() {
    console.log(this.props.match.params.name);
    if (this.state.load1 && this.state.load2 && this.state.load3) {
      return (
        <div className="container">
          {console.log(this.state)}
          <div className="row">
            <div className="col-sm-12">
              <h1 className="display-3">{this.props.match.params.name}</h1>
            </div>
            <div className="col-sm-12">
              <Contact nums={this.state.contact} place={this.state.mystate} />
            </div>
          </div>
          <div className="mixed-chart" style={{ width: "100%" }}>
            <Chart
              id="mychart"
              options={this.state.options}
              series={this.state.series}
              type="line"
              width="100%"
              style={{ padding: "2rem" }}
            />
          </div>
          <div className="row">
            <div className="col-sm-12">
              <h1 className="p-3">Hospital Stats</h1>
            </div>

            <Hospitals nums={this.state.Hospitals} place={this.state.mystate} />
          </div>
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

function Contact(props) {
  const place = props.place;
  const states = place.split(" ")[0];
  console.log(props.nums);
  if (props.nums === null)
    return <p>Data couldn't load properly please reload</p>;
  let numbers = props.nums.filter(data => data.loc.split(" ")[0] === states);
  if (typeof numbers[0] === "undefined") {
    return <p className="text-muted">Helpline Number: +91-11-23978046</p>;
  } else
    return <p className="text-muted">Helpline Number: {numbers[0].number}</p>;
}

function Hospitals(props) {
  const place = props.nums;
  const states = props.place.split(" ")[0];
  let numbers = place.filter(data => data.state.split(" ")[0] === states);

  if (typeof numbers[0] === "undefined") {
    const d = (
      <Row>
        <Col sm={12} md={6}>
          <Card border="dark" style={{ width: "100%", margin: "2rem" }}>
            <Card.Header>
              <img src={Hos} alt="Hospitals" />{" "}
            </Card.Header>

            <Card.Body>
              <Card.Text>Nan</Card.Text>
            </Card.Body>
          </Card>
        </Col>
        <Col sm={12} md={6}>
          <Card border="dark" style={{ width: "100%", margin: "2rem" }}>
            <Card.Header>
              {" "}
              <img src={Bed} alt="Beds" />{" "}
            </Card.Header>
            <Card.Body>
              <Card.Text>Nan</Card.Text>
            </Card.Body>
          </Card>
        </Col>
      </Row>
    );
    return <Container>{d}</Container>;
  } else {
    const hospit = numbers[0].totalHospitals;
    const beds = numbers[0].totalBeds;

    const d = (
      <Row>
        <Col sm={12} md={6}>
          <Card border="dark" style={{ width: "100%", margin: "1rem" }}>
            <Card.Header>
              <img src={Hos} alt="Hospitals" />{" "}
            </Card.Header>

            <Card.Body>
              <Card.Text>{hospit}</Card.Text>
            </Card.Body>
          </Card>
        </Col>
        <Col sm={12} md={6}>
          <Card border="dark" style={{ width: "100%", margin: "1rem" }}>
            <Card.Header>
              {" "}
              <img src={Bed} alt="Beds" />{" "}
            </Card.Header>
            <Card.Body>
              <Card.Text>{beds}</Card.Text>
            </Card.Body>
          </Card>
        </Col>
      </Row>
    );
    return <Container>{d}</Container>;
  }
}

// function Info(props) {
//   let tab = [];
//   props.data.map(datas =>
//     datas.regional
//       .filter(d => d.loc === props.sname)
//       .map(z => tab.push(z.totalConfirmed))
//   );
//   // console.log(tab);

//   // const val = props.data
//   //   .filter(name => name.loc === props.sname)
//   //   .map((data, key) => <p>{data}</p>);

//   return 1;
// }
export default States;
