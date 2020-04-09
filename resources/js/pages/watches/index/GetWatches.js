import React from "react";
import axios from "axios";
import SingleRow from "./SingleRow";

class GetWatches extends React.Component {
    constructor() {
        super();
        this.state = {
            loading: false,
            watches: []
        }
    }

    componentDidMount() {
        this.setState({loading: true});

        axios.get("/api/watches").then(
            response => {
                const watches = response.data;
                this.setState({
                    loading: false,
                    watches: watches
                });
            }
        );
    }

    render() {
        /*const watches = this.state.loading ? 'Loading' : this.state.watches.map(watch => <SingleRow key={watch.id}
                                                                                                      watch={watch}/>);*/

        const watches = this.state.watches.map(watch => <SingleRow key={watch.id} watch={watch}/>);
        return (
            <tbody>{watches}</tbody>
        );
    }
}

export default GetWatches
