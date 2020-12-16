import AuthRoutes from './auth';

const routes = [
  {
    path: '*',
    component: () => import('pages/Error404.vue')
  },
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Main.vue') }
    ]
  },
  ...AuthRoutes,
];
//routes.push(AuthRoutes);

export default routes
