import React, { Component } from "react";
import ReactDOM from "react-dom";
import ListaProductos from "./reservaProducto/ListaProductos";
import ListaItemReserva from "./reservaProducto/ListaItemReserva";

class Example extends Component {
    render() {
        return (
            <ListaProductos />
            /*
            <table className="table">
                <td className="col-1 w-50">
                    
                </td>
                <td className="col-1 w-50">
                    <ListaItemReserva />
                </td>
            </table>
            */
        );
    }
}
export default Example;

if (document.getElementById("example")) {
    ReactDOM.render(<Example />, document.getElementById("example"));
}
