export class IndexController {
    public async getMenu(req, res) {
        // Lógica para obter o menu
        res.send("Menu");
    }

    public async createOrder(req, res) {
        // Lógica para criar um pedido
        res.send("Pedido criado");
    }

    public async getOrder(req, res) {
        // Lógica para obter um pedido específico
        res.send("Detalhes do pedido");
    }

    public async updateOrder(req, res) {
        // Lógica para atualizar um pedido
        res.send("Pedido atualizado");
    }

    public async deleteOrder(req, res) {
        // Lógica para deletar um pedido
        res.send("Pedido deletado");
    }
}