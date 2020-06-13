import React, { Component } from "react";
import ReactDOM from "react-dom";
import ScrollMenu from "react-horizontal-scrolling-menu";
import CardProducto from "./CardProducto";

export const Lista = lista =>
    lista.map(item => {
        return (
            <div key={item.id}>
                <div className="col mb-4">
                    <CardProducto
                        id={item.id}
                        imagen={item.FOTO}
                        nombre={item.NOMBRE}
                        descripcion={item.DESCRIPCION}
                        cantidad={item.STOCK}
                    />
                </div>
            </div>
        );
    });

const Arrow = ({ text, className }) => {
    return (
        <div className={className}>
            <i className={text}></i>
        </div>
    );
};

const ArrowLeft = Arrow({
    text: "fas fa-chevron-circle-left",
    className: "arrow-prev"
});
const ArrowRight = Arrow({
    text: "fas fa-chevron-circle-right",
    className: "arrow-next"
});

class Categorias extends Component {
    render() {
        const menu = Lista(this.props.items);
        return (
            <div>
                <ScrollMenu
                    data={menu}
                    arrowLeft={ArrowLeft}
                    arrowRight={ArrowRight}
                />
            </div>
        );
    }
}
export default Categorias;
