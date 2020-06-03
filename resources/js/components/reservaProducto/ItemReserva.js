import React, { Component } from "react";
import ReactDOM from "react-dom";

const valor = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
class ItemReserva extends Component {
    constructor(props) {
        super(props);
        /*this.state = {
            nombres: ""
        };*/
    }

    render() {
        return (
            <div className="card mb-4">
                <div className="row">
                    <div className="col-md-5 mb-4 mb-md-0">
                        <div className="view">
                            <img
                                className="card-img-top"
                                src={this.props.imagen}
                                alt="Card image cap"
                                width="50px"
                                height="80px"
                            ></img>
                        </div>
                    </div>
                    <div className="col-md-7 mb-lg-0 mb-4">
                        <h5>
                            <strong>{this.props.nombre}</strong>
                        </h5>
                        <form action="" className="form-inline">
                            <div className="form-group">
                                <p>Cant.:</p>
                                <select
                                    id={"select" + this.props.id}
                                    className="browser-default custom-select"
                                    onChange={event => {
                                        this.props.onChange(
                                            this.props.id,
                                            event.target.value
                                        );
                                    }}
                                >
                                    {valor.map(item => {
                                        return (
                                            <option
                                                key={
                                                    this.props.id +
                                                    "select" +
                                                    item
                                                }
                                                value={item}
                                            >
                                                {item}
                                            </option>
                                        );
                                    })}
                                </select>
                                <button
                                    type="button"
                                    id={this.props.id}
                                    className="btn btn-blue btn-sm"
                                    onClick={() => {
                                        this.props.borrarItem(this.props.id);
                                    }}
                                >
                                    <i className="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        );
    }
}
export default ItemReserva;
