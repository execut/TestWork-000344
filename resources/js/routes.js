import AllAuthor from './components/AllAuthors';
import CreateAuthor from './components/CreateAuthor';
import EditAuthor from './components/EditAuthor';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllAuthor
    },
    {
        name: 'create',
        path: '/create',
        component: CreateAuthor
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditAuthor
    }
];
