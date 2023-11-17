import InputError from '@/Components/InputError';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Link, useForm, usePage } from '@inertiajs/react';
import { Transition } from '@headlessui/react';

export default function GameCard({game}) {

    const { data, patch, errors, processing, recentlySuccessful } = useForm({
        game_id: game.game_id
    });

    const submit = (e) => {
        e.preventDefault();

        /*patch(route('profile.update'));*/
    };

    return (
        <div className="p-4 m-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <header>
                <h2 className="text-lg font-medium text-gray-900">{game.game_name}</h2>
            </header>

            <form onSubmit={submit} className="mt-6 space-y-6">
                <div className="flex items-center gap-4">
                    <PrimaryButton disabled={processing}>Adicionar à lista</PrimaryButton>

                    <TextInput
                        id="game_id"
                        type="hidden"
                        value={game.game_id}
                        required
                    />

                    <Transition
                        show={recentlySuccessful}
                        enter="transition ease-in-out"
                        enterFrom="opacity-0"
                        leave="transition ease-in-out"
                        leaveTo="opacity-0"
                    >
                        <p className="text-sm text-gray-600">Adicionado!</p>
                    </Transition>
                </div>
                <InputError className="mt-2" message={errors.game_id} />
            </form>
        </div>
    );
}
