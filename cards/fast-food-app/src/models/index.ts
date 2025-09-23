export class Item {
    constructor(public id: number, public name: string, public price: number) {}
}

export class Pedido {
    constructor(public id: number, public items: Item[], public total: number) {}

    addItem(item: Item) {
        this.items.push(item);
        this.total += item.price;
    }
}