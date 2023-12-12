import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import GameCard from './Games/Partials/GameCard';
import { Head } from '@inertiajs/react';

export default function Index({ auth, games,quizzes }) {
    console.log(quizzes);
    games = [
        {game_id:1,game_name:'Overwatch'},
        {game_id:1,game_name:'League of Legends'},
        {game_id:1,game_name:'Ragnarok'}
    ];
    return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Menu Principal" />

            <div className="py-12 flex-col gap-2 mx-auto max-w-7xl">
                <div className="sm:px-6 lg:px-8 flex gap-2 mb-2">
                    <div className="overflow-hidden p-6 w-3/5 text-gray-900 bg-white shadow-sm sm:rounded-lg">
                        Questionnaires
                    </div>

                    <div className="overflow-hidden p-6 flex-grow flex-shrink-0 text-gray-900 bg-white shadow-sm sm:rounded-lg">
                        <div class="flex-col">
                            <div className="">
                                <p>Dias Desta semana que pretende jogar</p>
                            </div>
                            <div className="flex justify-between gap-2 text-center">
                                <div>
                                    <span className="text-blue-300">10/12</span>
                                    <div className="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Seg</div>
                                </div>
                                <div>
                                    <span className="text-blue-300">10/12</span>
                                    <div className="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Ter</div>
                                </div>
                                <div>
                                    <span className="text-blue-300">10/12</span>
                                    <div className="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Qua</div>
                                </div>
                                <div>
                                    <span className="text-blue-300">10/12</span>
                                    <div className="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Qui</div>
                                </div>
                                <div>
                                    <span className="text-blue-300">10/12</span>
                                    <div className="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Sex</div>
                                </div>
                                <div>
                                    <span className="text-blue-300">10/12</span>
                                    <div className="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Sab</div>
                                </div>
                                <div>
                                    <span className="text-blue-300">10/12</span>
                                    <div className="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Dom</div>
                                </div>
                                <div>
                                    <span className="text-blue-300">10/12</span>
                                    <div className="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">C</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div className="sm:px-6 lg:px-8 flex-1">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            <div className="grid grid-cols-2 gap-4 md:grid-cols-3">
                                {games.map(game => 
                                    <GameCard anho="testubg" game={game}/>
                                    )}
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
