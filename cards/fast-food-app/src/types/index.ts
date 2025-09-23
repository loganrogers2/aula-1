export interface Item {
    id: number;
    name: string;
    price: number;
    description?: string;
}

export interface Pedido {
    id: number;
    items: Item[];
    total: number;
    status: 'pending' | 'completed' | 'canceled';
    createdAt: Date;
}