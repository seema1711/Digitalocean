import React from "react";
import axios from "axios";
import { Row, Col, Card, Table, Button, Spinner } from "react-bootstrap";
import { Link } from "react-router-dom";
import virus from "./virus.png";
import cured from "./cured.png";
import dead from "./dead.png";
import CountUp from "react-countup";
import Icon from "./covid_icon.png";
class About extends React.Component {
  constructor(prop) {
    super(prop);
    this.state = {
      states: [],
      load: false
    };
  }
  render() {
    return (
      <div className="container">
        <div>
          <img className="mt-5 mb-2 img-fluid" src={Icon} alt="Title" />
        </div>
        <p className="text-muted">
          A web application to know more about COVID-19 condition in{" "}
          <span className="lead underline">INDIA</span>{" "}
        </p>
        <p className="display-4 underline">
          <Link className="Links" to={"/"}>
            HOME
          </Link>
        </p>
        <p className="lead">
          This is the first page of the web application,in here you can see the
          current status of COVID-19 in India as well as you can see the status
          of COVID in each State of India
        </p>
        <p className="display-4 underline">
          <Link className="Links" to={"/states"}>
            STATES
          </Link>
        </p>
        <p className="lead">
          Tabular representation of COVID-19 status in various states of India.{" "}
        </p>
        <p className="display-4 underline">
          <Link className="Links" to={"/covid"}>
            ABOUT COVID-19
          </Link>
        </p>

        <p className="lead">
          All the information regarding COVID-19 virus is present here.
        </p>
      </div>
    );
  }
}
//   getData = async () => {
//     await axios
//       .get(`https://api.rootnet.in/covid19-in/stats/latest`)
//       .then(res => {
//         const counts = res.data.data.regional;
//         this.setState({
//           states: counts,
//           load: true
//         });
//       });
//   };

//   componentDidMount() {
//     this.getData();
//   }

//   render() {
//     if (this.state.load) {
//       return (
//         <div className="container-fluid mt-5">
//           <ShowData data={this.state.states} />
//         </div>
//       );
//     } else {
//       return (
//         <div className="spinner">
//           <Spinner animation="border" />;
//         </div>
//       );
//     }
//   }
// }

// function ShowData(prop) {
//   const data = prop.data;
//   return (
//     <Table responsive="sm" striped hover size="sm">
//       <thead>
//         <tr>
//           <th>State</th>
//           <th>Confirmed</th>
//           <th>Deaths</th>
//           <th>Discharged</th>
//           <th>Indian Cases</th>
//           <th>Foreign Cases</th>
//           <th>Detailed Info</th>
//         </tr>
//       </thead>
//       <tbody>
//         {data.map((data, id) => (
//           <tr key={id}>
//             <td>{data.loc}</td>
//             <td>{data.totalConfirmed}</td>
//             <td>{data.deaths}</td>
//             <td>{data.discharged}</td>
//             <td>{data.confirmedCasesIndian}</td>
//             <td>{data.confirmedCasesForeign}</td>
//             <td>
//               <Link className="btn btn-dark" to={"/" + data.loc}>
//                 More Info
//               </Link>
//             </td>
//           </tr>
//         ))}
//       </tbody>
//     </Table>
//   );
// }

export default About;
