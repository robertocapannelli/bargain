import React from "react";
import Card from "reactstrap/es/Card";
import CardHeader from "reactstrap/es/CardHeader";
import UncontrolledDropdown from "reactstrap/lib/UncontrolledDropdown";
import {Badge, CardTitle, Col, Container, DropdownItem, DropdownMenu, DropdownToggle, Row} from "reactstrap";
import {Edit2, MoreHorizontal, Trash} from "react-feather";
import CardBody from "reactstrap/es/CardBody";
import Table from "reactstrap/es/Table";

class GetWatches extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            watches: []
        }
    }

    componentDidMount() {
        axios.get("/api/watches").then(
            response => {
                const watches = response.data;
                this.setState({watches});
            }
        );
    }

    render() {
        return (
            <tbody>
            {this.state.watches.map(watch =>
                <tr>
                    <td>
                        <img
                            src={watch.featured_image}
                            width="32"
                            height="32"
                            className="rounded-circle my-n1"
                            alt="Avatar"
                        />
                    </td>
                    <td>{watch.brand}</td>
                    <td>{watch.name}</td>
                    <td>{watch.reference}</td>
                    <td>
                        <Badge color="success">Active</Badge>
                    </td>
                    <td className="table-action">
                        <Edit2 className="align-middle mr-1" size={18}/>
                    </td>
                </tr>
            )}
            </tbody>
        );
    }
}


const WatchesList = () => (
    <Card>
        <CardHeader>
            <div className="card-actions float-right">
                <UncontrolledDropdown>
                    <DropdownToggle tag="a">
                        <MoreHorizontal/>
                    </DropdownToggle>
                    <DropdownMenu right>
                        <DropdownItem>Action</DropdownItem>
                        <DropdownItem>Another Action</DropdownItem>
                        <DropdownItem>Something else here</DropdownItem>
                    </DropdownMenu>
                </UncontrolledDropdown>
            </div>
            <CardTitle tag="h5" className="mb-0">
                Watches
            </CardTitle>
        </CardHeader>
        <CardBody>
            <Table className="mb-0" striped hover>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Reference</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <GetWatches/>
            </Table>
        </CardBody>
    </Card>
);

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
