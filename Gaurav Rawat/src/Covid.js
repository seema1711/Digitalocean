import React from "react";
import icon from "./covid_icon.png";
import { Tab, Row, Col, Nav, Alert } from "react-bootstrap";
import { Tabs } from "react-bootstrap";
import precaution from "./precautions.jpg";
class Covid extends React.Component {
  render() {
    return (
      <div
        className="container mx-auto px-5"
        style={{
          marginTop: "2rem",
          padding: "3rem",
          boxShadow:
            "0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"
        }}
      >
        <Tabs defaultActiveKey="home" id="uncontrolled-tab-example">
          <Tab eventKey="home" title="Overview">
            <Basic />
          </Tab>
          <Tab eventKey="prevention" title="Preventions">
            <Precautions />
          </Tab>

          <Tab eventKey="symptoms" title="Symptoms">
            <Symtoms />
          </Tab>
        </Tabs>
      </div>
    );
  }
}

function Basic() {
  return (
    <div className="container mt-5">
      <div>
        <img className="img-fluid" src={icon} alt="Head" />
      </div>
      <iframe
        src="https://www.youtube.com/embed/mOV1aBVYKGA"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowFullScreen
        style={{
          top: "3rem",
          left: "0",
          width: "100%",
          height: "15rem",
          margin: "2rem 0"
        }}
        title="Corona Information"
      />
      <p className="lead">
        <span style={{ fontSize: "5rem" }}>C</span>oronavirus disease (COVID-19)
        is an infectious disease caused by a newly discovered coronavirus. Most
        people infected with the{" "}
        <mark>
          COVID-19 virus will experience mild to moderate respiratory illness
          and recover without requiring special treatment.
        </mark>
        Older people, and those with underlying medical problems like
        cardiovascular disease, diabetes, chronic respiratory disease, and
        cancer are more likely to develop serious illness. The best way to
        prevent and slow down transmission is be well informed about the
        COVID-19 virus, the disease it causes and how it spreads. Protect
        yourself and others from infection by washing your hands or using an
        alcohol based rub frequently and not touching your face.{" "}
        <mark>
          The COVID-19 virus spreads primarily through droplets of saliva or
          discharge from the nose when an infected person coughs or sneezes
        </mark>
        , so it’s important that you also practice respiratory etiquette (for
        example, by coughing into a flexed elbow). At this time, there are no
        specific vaccines or treatments for COVID-19. However, there are many
        ongoing clinical trials evaluating potential treatments. WHO will
        continue to provide updated information as soon as clinical findings
        become available.
      </p>
    </div>
  );
}

function Precautions() {
  return (
    <div className="container">
      <img className="img-fluid" src={precaution} alt="Precautions" />
    </div>
  );
}

function Symtoms() {
  return (
    <div className="container" style={{ margin: "2rem" }}>
      <Alert variant="primary">Most common symptoms</Alert>
      <p className="lead">Fever</p>
      <p className="lead">Dry cough</p>
      <p className="lead">Tiredness</p>
      <Alert variant="warning">Less common symptoms</Alert>
      <p className="lead">Aches and pains</p>
      <p className="lead">Sore throat</p>
      <p className="lead">Diarrhoea</p>
      <p className="lead">Conjunctivitis</p>
      <p className="lead">Headache</p>
      <p className="lead">Loss of taste or smell</p>
      <p className="lead">
        A rash on skin, or discolouration of fingers or toes
      </p>
      <Alert variant="info">Serious symptoms</Alert>
      <p className="lead">Difficulty breathing or shortness of breath</p>
      <p className="lead">Chest pain or pressure</p>
      <p className="lead">Loss of speech or movement</p>
      <Alert variant="danger">
        <p className="text-muted">
          Seek immediate medical attention if you have serious symptoms. Always
          call before visiting your doctor or health facility. People with mild
          symptoms who are otherwise healthy should manage their symptoms at
          home. On average it takes 5–6 days from when someone is infected with
          the virus for symptoms to show, however it can take up to 14 days.
        </p>
      </Alert>
    </div>
  );
}

export default Covid;
