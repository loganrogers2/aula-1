import { Router } from 'express';
import IndexController from '../controllers/index';

const router = Router();
const indexController = new IndexController();

export const setRoutes = () => {
    router.get('/menu', indexController.getMenu);
    router.post('/order', indexController.createOrder);
    return router;
};