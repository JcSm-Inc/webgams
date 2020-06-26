import React, { Component } from "react";
import ReactDOM from "react-dom";
import "./BuscarProducto.css";
import Categorias from "./Categorias";

const url = process.env.MIX_APP_LOCAL_URL;
class BuscarProducto extends Component {
    constructor(props) {
        super(props);
        this.state = {
            nombre: "",
            productos: []
        };
    }
    async onChange(valor) {
        console.log(valor);
        this.setState({ nombre: valor });
        if (this.state.nombre != "") {
            const cat = await axios.get(url + "productos/buscar", {
                params: { buscar: valor }
            });
            this.setState({ productos: cat.data.productos });
            console.log(cat);
        }
    }
    render() {
        return (
            <div>
                <div className="borde">
                    <form className="form-inline d-flex justify-content-left md-form form-sm active-cyan active-cyan-2 mt-2">
                        <i className="fas fa-search" aria-hidden="true"></i>
                        <input
                            className="form-control form-control-sm ml-3 w-75"
                            type="text"
                            placeholder="Buscar productos"
                            aria-label="Search"
                            onChange={event => {
                                this.onChange(event.target.value);
                            }}
                        />
                    </form>
                </div>
                {this.state.nombre.length > 0 && (
                    <div>
                        {this.state.productos.length > 0 ? (
                            <div>
                                <h4>Productos relacionados a la busqueda</h4>
                                <Categorias items={this.state.productos} />
                            </div>
                        ) : (
                            <h4 className="h4">
                                No existe ningun producto relacionado
                            </h4>
                        )}
                    </div>
                )}
            </div>
        );
    }
}
export default BuscarProducto;
