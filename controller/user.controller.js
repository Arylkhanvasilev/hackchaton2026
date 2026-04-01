const db = require('../db')

class UserController {
    async createUser(req,res) {
        const {name, email} = req.body
        const newPerson = await db.query('INSERT INTO person1 (name, email) values ($1, $2) RETURNING *', [name, email])
        res.json(newPerson.rows[0])
    }
    async getUser(req,res) {
        const users = await db.query('SELECT * FROM person1')
        res.json(users.rows)
    }
    async getOneUser(req,res) {
        const id = req.params.id
        const user = await db.query('SELECT * FROM person1 where id = $1', [id])
        res.json(user.rows[0])
    }
    async updateUser(req,res) {
        const {id, name, email} = req.body
        const user = await db.query(
            'UPDATE person set name = $1, email = $2 where id = $3 RETURNING *', 
            [name,email,id]
        )
        res.json(user.rows[0])
    }
    async deleteUser(req,res) {
        const id = req.params.id
        const user = await db.query('DELETE FROM person1 where id = $1', [id])
        res.json(user.rows[0])
    }
}

module.exports = new UserController()