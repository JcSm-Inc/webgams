import React, { Component } from "react";
import ReactDOM from "react-dom";
import ListaProductos from "./ListaProductos";
import ListaItemReserva from "./ListaItemReserva";

class RealizarReserva extends Component {
    render() {
        return (
            <table className="table">
                <td className="col-1 w-50">
                    <ListaProductos />
                </td>
                <td className="col-1 w-50">
                    <ListaItemReserva />
                </td>
            </table>
        );
    }
}
export default RealizarReserva;

if (document.getElementById("reserva")) {
    ReactDOM.render(<RealizarReserva />, document.getElementById("reserva"));
}
