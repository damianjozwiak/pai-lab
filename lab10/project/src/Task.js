import React, {Component} from "react"
        
class Task extends Component {

    constructor(props) {
        super(props)

        this.state = {
            isCompleted: false
        }

        this.handleChange = this.handleChange.bind(this)
    }

    handleChange() {
        const prev = this.state.isCompleted
        
        this.setState({
            isCompleted: !prev
        })
    }

    render() {
        const completedStyle = {
            color: "d3d3d3",
            fontStyle: "italic",
            textDecoration: "line-through"
        }

        const filter = {
            display: (this.props.isFilterOn && this.state.isCompleted) ? "none" : "block"
        }
    
        // alert(this.props.text)
        return (
            <div style = {filter}>
                <input
                    type="checkbox"
                    checked={this.state.isCompleted}
                    onChange={() => this.handleChange()}
                />
                <span style={this.state.isCompleted ? completedStyle : null}>
                    {this.props.text}
                </span>
            </div>
        )
    }
}       

export default Task