import {Badge} from "reactstrap";
import {Link} from "react-router-dom";
import {Edit2} from "react-feather";
import React from "react";

const SingleRow = (props) => (
    <tr className={props.watch.id}>
        <td>
            <img
                src={props.watch.featured_image}
                width="32"
                height="32"
                className="rounded-circle my-n1"
                alt="Avatar"
            />
        </td>
        <td>{props.watch.brand}</td>
        <td>{props.watch.name}</td>
        <td>{props.watch.reference}</td>
        <td>
            <Badge color="success">Active</Badge>
        </td>
        <td className="table-action">
            <Link to={'/app/watches/' + props.watch.id}>
                <Edit2 className="align-middle mr-1" size={18}/>
            </Link>
        </td>
    </tr>
);

export default SingleRow;
