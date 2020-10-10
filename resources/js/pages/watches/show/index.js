import React from "react";
import {Card, CardBody, CardHeader, CardTitle, Col, Container, Row} from "reactstrap";

const ShowWatch = () => (
    <Container fluid className="p-0">
        <h1 className="h3 mb-3">Watch name</h1>
        <Row>
            <Col xl="12">
                <Card>
                    <CardHeader>
                        <CardTitle tag="h5" className="mb-0">Empty card</CardTitle>
                    </CardHeader>
                    <CardBody>&nbsp;</CardBody>
                </Card>
            </Col>
        </Row>
    </Container>
);

export default ShowWatch;
