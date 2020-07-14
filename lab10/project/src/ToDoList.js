import React, {Component} from "react"

import Task from "./Task"
import NewTask from "./NewTask"

class ToDoList extends Component {
    
    constructor(props) {
        super(props)
        let todoItems = []

        this.state = {
            items: todoItems,
            isFilterOn: false
        }

        this.hideCompleted = this.hideCompleted.bind(this)
        this.addItem = this.addItem.bind(this)
    }

    hideCompleted() {
        const filter = this.state.isFilterOn
        
        this.setState({
            isFilterOn: !filter
        })
    }

    addItem(item) {
        const oldItems = this.state.items
        
        this.setState({
            items: oldItems.concat(item)
        })
    }
    
    render() {
        
        const todos = this.state.items.map(task => <Task key={task.key} text={task.text} isFilterOn={this.state.isFilterOn}/>)
        return (
            <div>
                <h1>This is my to-do list</h1>
                <input type="checkbox" onChange={this.hideCompleted}/> Hide completed tasks <br /><br />
                {todos}<br />
                <NewTask items={this.state.items} addItem={this.addItem}/>
            </div>
        )
    }
}

export default ToDoList