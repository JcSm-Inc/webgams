import React, { Component } from "react";
import ReactDOM from "react-dom";
import CardProducto from "./CardProducto";

class Example extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">COMPONETE REACT</div>

                            <div className="card-body">
                                <CardProducto />
                                esto es un componente de react funcional hfjsfd
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Example;

if (document.getElementById("example")) {
    ReactDOM.render(<Example />, document.getElementById("example"));
}
