<x-layout>
    <div class="min-h-screen flex flex-col justify-center items-center">

        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold mb-2">Welcome to Yatzy!</h1>
            <p class="text-lg text-gray-600">Join a public game, or create your own and invite others to play.</p>
        </div>

        <!-- Form field and button to join private game -->
        <div class="w-full max-w-4xl mb-4">
            <form action="#" method="POST" class="flex items-center justify-center gap-2">
                @csrf
                <input type="text" name="room_code" class="input input-lg text-2xl" maxlength="5"
                       placeholder="Enter Room Code"
                       oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);"
                >
                <button type="submit" class="btn btn-lg btn-secondary">Join Game</button>
            </form>
        </div>

        <!-- Button to Create Game -->
        <div class="mb-6">
            <a href="{{ route('create') }}" class="btn btn-primary btn-lg">
                Create a New Game
            </a>
        </div>

        <!-- Public Games List -->
        <div class="w-full max-w-4xl mb-4">
            <h2 class="text-2xl font-semibold mb-4 text-gray-700">Public games waiting for players</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Example of a Waiting Game -->
                <div class="card bg-white shadow-lg border border-green-500">
                    <div class="card-body">
                        <h3 class="card-title text-lg font-bold text-green-500">Room Code: ABCD</h3>
                        <p class="text-gray-600">Status: Waiting for players</p>
                        <p class="text-gray-600">Created by: Player1</p>
                        <p class="text-gray-600">Players: 2/6</p>
                        <div class="card-actions mt-4">
                            <a href="/game/ABCD" class="btn btn-success">Join Game</a>
                        </div>
                    </div>
                </div>

                <!-- Example of an Ongoing Game with Audience Feature -->
                <div class="card bg-white shadow-lg border border-yellow-500">
                    <div class="card-body">
                        <h3 class="card-title text-lg font-bold text-yellow-500">Room Code: XY12</h3>
                        <p class="text-gray-600">Status: In Progress</p>
                        <p class="text-gray-600">Created by: Player2</p>
                        <p class="text-gray-600">Players: 5</p>
                        <div class="card-actions mt-4">
                            <a href="/game/XY12" class="btn btn-warning">Watch Game</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="w-full max-w-4xl">
            <h2 class="text-2xl font-semibold mb-4 text-gray-700">Ongoing games</h2>

        </div>
    </div>
</x-layout>
