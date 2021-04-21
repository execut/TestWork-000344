import AllAuthor from './components/AllAuthors';
import CreateAuthor from './components/CreateAuthor';
import EditAuthor from './components/EditAuthor';

export const routes = [
    {
        name: 'authors',
        path: '/authors',
        component: AllAuthor
    },
    {
        name: 'create',
        path: '/authors/create',
        component: CreateAuthor
    },
    {
        name: 'edit',
        path: '/autgors/edit/:id',
        component: EditAuthor
    }
];
