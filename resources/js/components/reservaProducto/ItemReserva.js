import React, { Component } from "react";
import ReactDOM from "react-dom";

class ItemReserva extends Component {
    constructor(props) {
        super(props);
        this.state = {
            nombre: ""
        };
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
                        <h4>{this.props.nombre}</h4>
                        <form action="" className="form-inline">
                            <div className="form-group">
                                <label>Cant.:</label>
                                <select
                                    id={"select" + this.props.id}
                                    className="browser-default custom-select"
                                    defaultValue="1"
                                >
                                    <option selected value="1">
                                        1
                                    </option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
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
