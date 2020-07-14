import React, {Component} from "react"

// import Task from "./Task"

class NewTask extends Component {
    
    constructor(props) {
        super(props)
        
        this.state = {
            text: ''
        }

        this.handleChange = this.handleChange.bind(this)
        this.handleSubmit = this.handleSubmit.bind(this)
    }

    handleChange(event) {
        this.setState({
            text: event.target.value
        })
    }

    handleSubmit(event) {
        let newText = this.state.text
        if (newText !== "") {
            let array = this.props.items
            let max = 0
            for (let el of array) {
                if (el.key > max) {
                    max = parseInt(el.key)
                }
            }
            max += 1
            
            var NewItem = {
                key: max,
                text: newText
            }   
        }
        event.preventDefault()

        this.setState({
            text: ''
        })

        this.props.addItem(NewItem)
    }
    
    render() {
        return (
            <form onSubmit={this.handleSubmit}>
                <input 
                    type="text"
                    name="taskText"
                    placeholder="Enter new task"
                    value={this.state.text}
                    onChange={this.handleChange}
                />
                <button type="submit">Add</button>
            </form>
        )
    }
}

export default NewTask