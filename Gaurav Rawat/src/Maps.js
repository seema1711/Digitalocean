import React, { Component } from "react";
import { HereMap, Marker } from "rc-here-maps";
import axios from "axios";
import virus from "./virus_map.png";
import cured from "./cured_map.png";
import dead from "./dead_map.png";
import "./App.css";
import marker from "./marker.png";
class Maps extends Component {
  constructor(props) {
    super(props);

    this.state = {
      showPopover: [
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false
      ],
      load: false,
      data: [],
      position: [
        { lat: 11.7401, lng: 92.6586 },
        { lat: 15.9129, lng: 79.74 },
        { lat: 28.218, lng: 94.7278 },
        { lat: 26.2006, lng: 92.9376 },
        { lat: 25.0961, lng: 85.3131 },
        { lat: 30.7333, lng: 76.7794 },
        { lat: 21.2787, lng: 81.8661 },
        { lat: 20.1809, lng: 73.0169 },
        { lat: 28.7041, lng: 77.1025 },
        { lat: 15.2993, lng: 74.124 },
        { lat: 22.2587, lng: 71.1924 },
        { lat: 29.0588, lng: 76.0856 },
        { lat: 31.1048, lng: 77.1734 },
        { lat: 33.7782, lng: 76.5762 },
        { lat: 23.6102, lng: 85.2799 },
        { lat: 15.3173, lng: 75.7139 },
        { lat: 10.8505, lng: 76.2711 },
        { lat: 35.0411, lng: 77.9371 },
        { lat: 22.9734, lng: 78.6569 },
        { lat: 19.7515, lng: 75.7139 },
        { lat: 24.6637, lng: 93.9063 },
        { lat: 25.467, lng: 91.3662 },
        { lat: 23.1645, lng: 92.9376 },
        { lat: 26.1584, lng: 94.5624 },
        { lat: 20.9517, lng: 85.0985 },
        { lat: 11.9416, lng: 79.8083 },
        { lat: 31.1471, lng: 75.3412 },
        { lat: 27.0238, lng: 74.2179 },
        { lat: 27.533, lng: 88.5122 },
        { lat: 11.1271, lng: 78.6569 },
        { lat: 18.1124, lng: 79.0193 },
        { lat: 23.9408, lng: 91.9882 },
        { lat: 30.0668, lng: 79.0193 },
        { lat: 26.8467, lng: 80.9462 },
        { lat: 22.9868, lng: 87.855 }
      ],
      center: {
        lat: 30.7333,
        lng: 76.7794
      }
    };
  }
  getData = async () => {
    await axios
      .get(`https://api.rootnet.in/covid19-in/stats/latest`)
      .then(res => {
        const counts = res.data.data.regional;
        this.setState({
          data: counts,
          load: true
        });
      });
  };

  onTogglePopover = (showPopover, id) => {
    let pop = this.state.showPopover;
    pop[id] = showPopover;
    this.setState({ showPopover: pop });
  };

  componentDidMount() {
    this.getData();
  }
  render() {
    if (this.state.load) {
      return (
        <div className="container">
          {/* <Mark
            data={this.state.data}
            position={this.state.position}
            center={this.state.center}
          /> */}

          <Info />
          <div style={{ height: "500px" }}>
            <HereMap
              style={{ width: "100%", height: "500px" }}
              appId="0fYEmBdIzWGU8LH7EOwy"
              appCode="La34b8payBKbfDVo2k4A4GT5J-p-KZGyl_VgNd-f_Ws"
              useHTTPS
              center={this.state.center}
            >
              {this.state.data.map((data, id) => (
                <Marker
                  onMouseEnter={this.onTogglePopover.bind(this, true, id)}
                  onMouseLeave={this.onTogglePopover.bind(this, false, id)}
                  key={id}
                  lat={this.state.position[id].lat}
                  lng={this.state.position[id].lng}
                >
                  <img src={marker} alt="Mark" />

                  {this.state.showPopover[id] && (
                    <div className="pop-over">
                      <p className="lead">{data.loc}</p>
                      <p className="d-inline">
                        <span>
                          <img src={virus} alt="virus" />
                          {data.totalConfirmed}
                        </span>
                      </p>
                      <p className="d-inline">
                        <span>
                          <img src={cured} alt="cured" />
                          {data.discharged}
                        </span>
                      </p>
                      <p className="d-inline">
                        <span>
                          <img src={dead} alt="Dead" />
                        </span>{" "}
                        {data.deaths}
                      </p>

                      {/* <ul className="list-group">
                        <li className="list-inline-item lead">{data.loc}</li>
                        <li className="list-inline-item">
                          <span>
                            <img src={virus} alt="cases" />

                            {data.totalConfirmed}
                          </span>
                        </li>
                        <li className="list-inline-item">
                          <span>
                            <img src={cured} alt="cured" />

                            {data.discharged}
                          </span>
                        </li>
                        <li className="list-inline-item">
                          <span>
                            <img src={dead} alt="dead" /> {data.deaths}
                          </span>
                        </li>
                      </ul> */}
                    </div>
                  )}
                </Marker>
              ))}
            </HereMap>
          </div>
        </div>
      );
    } else return "Hey";
  }
}

function Mark(prop) {
  const data = prop.data;
  let position = prop.position;
  const center = prop.center;

  let d = (
    <HereMap
      style={{ width: "100%", height: "500px" }}
      appId="0fYEmBdIzWGU8LH7EOwy"
      appCode="La34b8payBKbfDVo2k4A4GT5J-p-KZGyl_VgNd-f_Ws"
      useHTTPS
      center={center}
    >
      {data.map((data, id) => (
        <Marker key={id} lat={position[id].lat} lng={position[id].lng}>
          <div className="custom-marker">
            <p>{data.loc}</p>
            <p>
              Cases<span className="text-muted">{data.totalConfirmed}</span>
            </p>
            <p>
              Cured<span className="text-muted">{data.discharged}</span>
            </p>
            <p>
              Deaths<span className="text-muted">{data.deaths}</span>
            </p>
          </div>
        </Marker>
      ))}
    </HereMap>
  );
  return <div style={{ width: "100%", height: "500px" }}>{d}</div>;
}
function Info(prop) {
  return (
    <div className="col-sm-12">
      <p className="lead">Map Legends</p>
      <p className="d-inline p-2">
        State :{" "}
        <span>
          <img src={marker} alt="cases" />
        </span>
      </p>

      <p className="d-inline  p-2">
        Total cases :{" "}
        <span>
          <img src={virus} alt="cases" />
        </span>
      </p>
      <p className="d-inline  p-2">
        Cured :{" "}
        <span>
          <img src={cured} alt="cases" />
        </span>
      </p>
      <p className="d-inline  p-2">
        Deaths :{" "}
        <span>
          <img src={dead} alt="cases" />
        </span>
      </p>
    </div>
  );
}

export default Maps;
