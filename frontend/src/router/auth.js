const AuthRoutes = [
  {
    path: '/auth',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { 
        path: '/login', 
        component: () => import('pages/auth/Login.vue') 
      },
      { 
        path: '/signup', 
        component: () => import('pages/auth/Signup.vue') 
      }
    ]
  },
];

export default AuthRoutes