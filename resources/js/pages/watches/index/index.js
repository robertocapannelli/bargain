import React from "react";

import {Col, Container, Row} from "reactstrap";
import WatchesList from "./WatchTable";

const Watches = () => (
    <Container fluid className="p-0">
        <h1 className="h3 mb-3">Watches</h1>
        <Row>
            <Col xl="12">
                <WatchesList/>
            </Col>
        </Row>
    </Container>
);

export default Watches;
