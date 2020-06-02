import React, { Component } from "react";
import ReactDOM from "react-dom";
import axios from "axios";
import CardProducto from "./CardProducto";

class ListaProductos extends Component {
    constructor(props) {
        super(props);
        this.state = {
            productos: []
        };
    }
    async componentDidMount() {
        const res = await axios.get("../public/productos/indexReact");
        this.setState({ productos: res.data.productos });
        //console.log(res.data);
        // console.log(this.state.productos);
    }
    render() {
        return (
            <div className="card scrollbar-light-blue">
                <ul className="list-group list-group-flush">
                    <li className="list-group-item">
                        <h5>Productos</h5>
                    </li>
                    <li className="list-group-item">
                        <div className="row row-cols-1 row-cols-md-2 row-cols-md-3">
                            {this.state.productos.map((producto, i) => {
                                return (
                                    <div key={producto.id}>
                                        <div className="col mb-4">
                                            <CardProducto
                                                id={producto.id}
                                                imagen={producto.FOTO}
                                                nombre={producto.NOMBRE}
                                                descripcion={
                                                    producto.DESCRIPCION
                                                }
                                                cantidad={producto.STOCK}
                                            />
                                        </div>
                                    </div>
                                );
                            })}
                        </div>
                    </li>
                </ul>
            </div>
        );
    }
}
export default ListaProductos;
