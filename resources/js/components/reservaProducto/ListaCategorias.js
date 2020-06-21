import React, { Component } from "react";
import ReactDOM from "react-dom";
import Categorias from "./Categorias";
import BuscarProducto from "./BuscarProducto";

const url = process.env.MIX_APP_LOCAL_URL;

class ListaCategorias extends Component {
    constructor(props) {
        super(props);
        this.state = {
            productos: [],
            materialdeescritorio: [],
            materialdelimpieza: [],
            herramienta: []
        };
    }
    async componentDidMount() {
        const res = await axios.get(url + "productos/indexReact");
        this.setState({ productos: res.data.productos });
    }
    async componentWillMount() {
        const cat = await axios.get(url + "productos/indexCategorias", {
            params: { CATEGORIA: "MATERIAL DE ESCRITORIO" }
        });
        const lim = await axios.get(url + "productos/indexCategorias", {
            params: { CATEGORIA: "MATERIAL DE LIMPIEZA" }
        });
        const herr = await axios.get(url + "productos/indexCategorias", {
            params: { CATEGORIA: "HERRAMIENTA" }
        });
        this.setState({ materialdeescritorio: cat.data.productos });
        this.setState({ materialdelimpieza: lim.data.productos });
        this.setState({ herramienta: herr.data.productos });
    }
    render() {
        return (
            <div>
                <BuscarProducto />
                <h4>Productos mas Consumidos</h4>
                <Categorias items={this.state.productos} />
                <h4>Material de Escritorio</h4>
                <Categorias items={this.state.materialdeescritorio} />
                <h4>Material de Limpieza</h4>
                <Categorias items={this.state.materialdelimpieza} />
                <h4>Herramientas</h4>
                <Categorias items={this.state.herramienta} />
            </div>
        );
    }
}
export default ListaCategorias;
if (document.getElementById("listacategorias")) {
    ReactDOM.render(
        <ListaCategorias />,
        document.getElementById("listacategorias")
    );
}
