import Card from "reactstrap/es/Card";
import CardHeader from "reactstrap/es/CardHeader";
import UncontrolledDropdown from "reactstrap/lib/UncontrolledDropdown";
import {CardTitle, DropdownItem, DropdownMenu, DropdownToggle} from "reactstrap";
import {MoreHorizontal} from "react-feather";
import CardBody from "reactstrap/es/CardBody";
import Table from "reactstrap/es/Table";
import React from "react";
import TableHeader from "./TableHeader";
import GetWatches from "./GetWatches";

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
                <TableHeader/>
                <GetWatches/>
            </Table>
        </CardBody>
    </Card>
);

export default WatchesList;
